<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;

class ImageController extends Controller
{

    // Returns an image from the main image storage disk
    public function show(ImageGetRequest $request, $image)
    {
        return $this->image_response(config('images.storage'), '', $image);
    }

    // Returns an image from the project image storage disk
    public function project(ImageGetRequest $request, $project, $image)
    {
        return $this->image_response('project_images', $project, $image);
    }

    // Returns the image server factory used to process images
    private function create_server($source, $cache)
    {
        return ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $source,
            'cache' => $cache,
            'cache_path_prefix' => '',
            'presets' => config('images.presets')
        ]);
    }

    // Returns an image from a particular disk & path
    private function image_response($disk, $path, $image)
    {

        $filesystem = Storage::disk($disk);
        $filesystem_cache = Storage::disk(config('images.cache'));
        if ($filesystem->exists($path . '/' . $image)) {
            // Check if it's a supported image type first
            if (in_array($filesystem->mimeType($path . '/' . $image), config('images.mime_types'))) {
                // It's supported by the processor
                $server = $this->create_server($filesystem->path($path), $filesystem_cache->path($disk . '/' . $path));
                header('Glide:Supported');
                if($server->cacheFileExists($image, request()->all())) {
                    header('GlideCache:Hit');
                } else {
                    header('GlideCache:Miss');
                }
                return $server->getImageResponse($image, request()->all());
            }
            // It's not supported - so just return the file
            header('Glide:Unsupported');
            if ($filesystem->mimeType($path . '/' . $image) == 'image/svg') {
                // Set the correct content type for SVG's
                $headers = ['Content-Type' => 'image/svg+xml'];
            } else {
                $headers = [];
            }

            return response()->file($filesystem->path($path . '/' . $image), $headers);
        }
        abort('404');

    }
}

<?php namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use League\Glide\Responses\LaravelResponseFactory;
use League\Glide\ServerFactory;
use App\Http\Requests\ImageGetRequest;

class ImageController extends Controller
{

    private $storage;

    public function __construct(Storage $storage)
    {
        $this->storage = $storage;
    }

    // Returns an image from the main image storage disk
    public function show(ImageGetRequest $request, $image)
    {
        return $this->image_response(config('images.storage'), '/', $image);
    }

    // Returns an image from the project image storage disk
    public function project(ImageGetRequest $request, $project, $image)
    {
        return $this->image_response('project_images', $project, $image);
    }

    // Returns the image server factory used to process images
    private function create_server($source) {
        return ServerFactory::create([
            'response' => new LaravelResponseFactory(app('request')),
            'source' => $source,
            'cache' => $source,
            'cache_path_prefix' => '.cache',
            'presets' => config('images.presets')
        ]);
    }

    // Returns an image from a particualr disk & path
    private function image_response($disk, $path, $image) {

        $filesystem = $this->storage::disk($disk);

        if($filesystem->exists($path . '/' . $image)) {
            $server = $this->create_server($filesystem->path($path));
            return $server->getImageResponse($image, request()->all());
        } else {
            abort('404');
        }
    }
}

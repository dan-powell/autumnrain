<?php

namespace App\Http\Controllers\AiWork;

use App\Http\Controllers\Controller;
use App\Models\AiWork\Piece;
use App\Models\AiWork\Theme;
use Illuminate\Http\Request;

class AiWorkController extends Controller
{
    public function index(Request $request)
	{
        $themes = Theme::with(['pieces'])->orderBy('created_at', $request->query('order') == 'asc' ? 'ASC' : 'DESC')->paginate(6)->appends([
            'order' => $request->query('order'),
        ]);

        return view('projects.aiwork.index')->with([
            'themes' => $themes,
            'pieces' => Piece::with(['themes'])->orderBy('created_at', $request->query('order') == 'asc' ? 'ASC' : 'DESC')->paginate(24)->appends([
                'created_at' => $request->query('order'),
            ])
        ]);
    }

    public function show(string $slug)
	{
        $piece = Piece::with(['themes.pieces'])->where('slug', $slug)->firstOrFail();

        $first = Piece::where('created_at', '<', $piece->created_at)->orderBy('created_at', 'ASC')->first();
        $next = Piece::where('created_at', '>', $piece->created_at)->orderBy('created_at', 'ASC')->first();
        $previous = Piece::where('created_at', '<', $piece->created_at)->orderBy('created_at', 'DESC')->first();
        $last = Piece::where('created_at', '>', $piece->created_at)->orderBy('created_at', 'DESC')->first();


        if(!$piece) {
            abort('404');
        }

        return view('projects.aiwork.show')->with([
            'piece' => $piece,
            'first' =>  $first,
            'next' =>  $next,
            'previous' => $previous,
            'last' => $last
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'content' => 'required|string|max:500',
            'commentable_type' => 'required|string',
            'commentable_id' => 'required|integer',
        ]);

        Comment::create([
            'content' => $request->content,
            'commentable_type' => $request->commentable_type,
            'commentable_id' => $request->commentable_id,
            'user_id' => Auth::id(), // Menggunakan Auth::id() untuk mengambil ID pengguna yang login
        ]);

        return redirect()->back()->with('success', 'Comment added successfully!');
    }

    public function destroy($id)
    {
        $comment = Comment::findOrFail($id);

        // Pastikan hanya pemilik komentar atau admin yang dapat menghapus
        if (Auth::id() === $comment->user_id || Auth::user()->role === 'admin') {
            $comment->delete();

            return redirect()->back()->with('success', 'Comment deleted successfully!');
        }

        return redirect()->back()->with('error', 'You are not authorized to delete this comment.');
    }
}

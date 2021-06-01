<?php

namespace App\Http\Controllers;

use App\Models\ChatFolder;
use Illuminate\Http\Request;

class ChatFolderController extends Controller
{

    public function index($folder_id)
    {
        return ChatFolder::all()->where('folder_id', $folder_id);
    }

    public function store(Request $request, $folder_id)
    {
        $folder = ChatFolder::where('chat_id', $request->chat_id)->where('folder_id', $folder_id)->first();
        if (!$folder) {
            return ChatFolder::create([
                'chat_id' => $request->chat_id,
                'folder_id' => $folder_id
            ]);
        }
        return response()->noContent(404);
    }

    public function deleteChatInFolder($folder_id, $chat_id)
    {
        return ChatFolder::where('chat_id', $chat_id)->where('folder_id', $folder_id)->first()->delete();
    }
}

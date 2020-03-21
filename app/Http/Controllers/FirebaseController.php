<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Kreait\Firebase;
use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

class FirebaseController extends Controller
{
    public function index()
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();

        // $reference = $database->getReference('Message');
        // $snapshot = $reference->getSnapshot();
        // $pesan = $snapshot->getValue();
        $keys = array_keys($database->getReference('chat')->getSnapshot()->getValue('text'));
        // $abc = $pendingprofiles->getValue();

        return view('chat.firebase.index', ['keys' => $keys]);
    }

    public function store(Request $request)
    {
        $serviceAccount = ServiceAccount::fromJsonFile(__DIR__ . '/FirebaseKey.json');
        $firebase = (new Factory)
            ->withServiceAccount($serviceAccount)
            ->create();
        $database = $firebase->getDatabase();
        $ref = $database->getReference('chat');
        $key = $ref->push();
        $ref->getChild($key)->set([
            'text' => $request['message'],
        ]);

        return redirect()->route('firebase');
    }
}

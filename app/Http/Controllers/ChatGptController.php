<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class ChatGptController extends Controller
{
    public function generateCoverLetter(Request $request): JsonResponse|RedirectResponse
    {
        if (!Auth::check()){
            return redirect()->route('login');
        }

        $request->validate([
            'responsibilities' => 'required',
            'vacancy' => 'required',
            'experience' => 'required',
            'company_name' => 'required',
        ]);

        $prompt = "Write a good cover letter for a job with this vacancy: " . $request->vacancy . ". The candidate should have " . $request->experience . " experience. The candidate should be able to " . $request->responsibilities . ". Start the letter with 'Dear " . $request->company_name . " team, without writing  [Your Name] [Your Phone Number] [Your Email Address] [LinkedIn Profile or Portfolio, if applicable] and everything like this. the candidate's name is ". Auth::user()->name . ". with 150-200 words.";

        $message = [
            [
                'role' => 'system',
                'content' => $prompt,
            ]
        ];

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . env('CHAT_GPT_API_KEY'),
            'Content-Type' => 'application/json',
        ])->post(env('CHAT_GPT_API_URL'), [
            'model' => 'gpt-4o-mini-2024-07-18',
            'messages' => $message,
        ]);

        $result = $response->json()['choices'][0]['message']['content'];

        return response()->json(['data' => $result]);
    }
}

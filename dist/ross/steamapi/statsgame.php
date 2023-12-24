<?php

include("./../../steam.php");
include("./steamapi/gamesapi.php");
foreach ($game_data['response']['games'] as $game) {
                    $apiUrl = 'http://api.steampowered.com/ISteamUserStats/GetUserStatsForGame/v0002/?appid=' . $game_data['response']['games']['0']['appid'] . '&key='. $apikey .'&steamid=76561197972495328';

                    // Initialize cURL session
                    $ch = curl_init($apiUrl);

                    // Set cURL options
                    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

                    // Execute cURL session and get the response
                    $response = curl_exec($ch);

                    // Check for cURL errors
                    if (curl_errno($ch)) {
                        echo 'cURL error: ' . curl_error($ch);
                    }

                    // Close cURL session
                    curl_close($ch);

                    // Decode the JSON response
                    $gameinfo_data = json_decode($response, true);
                }
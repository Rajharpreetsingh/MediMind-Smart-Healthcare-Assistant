<?php

// 🔑 API KEY (use NEW regenerated key here)
$apiKey = "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";

// Get form data safely
$prompt = $_POST['prompt'] ?? '';
$age = $_POST['age'] ?? '';
$name = $_POST['pname'] ?? '';
$gender = $_POST['gender'] ?? '';
$pulse = $_POST['pulse'] ?? '';
$bodytemperature = $_POST['bt'] ?? '';
$respiratoryrate = $_POST['rr'] ?? '';
$oxygen = $_POST['oxygen'] ?? '';

// Final prompt
$finalPrompt = $prompt . "\n\n"
. "Analyze the following patient data and provide possible health issues in structured format:\n\n"
. "Patient Name: $name\n"
. "Age: $age\n"
. "Gender: $gender\n"
. "Pulse: $pulse\n"
. "Body Temperature: $bodytemperature\n"
. "Respiratory Rate: $respiratoryrate\n"
. "Oxygen Saturation: $oxygen\n";

// API request
$data = [
    "model" => "openai/gpt-3.5-turbo",
    "max_tokens" => 300,
    "messages" => [
        [
            "role" => "user",
            "content" => $finalPrompt
        ]
    ]
];

$ch = curl_init("https://openrouter.ai/api/v1/chat/completions");

// ✅ IMPORTANT SETTINGS
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_TIMEOUT, 20);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 10);

// ⚠️ Fix SSL issue (free hosting)
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

// ✅ HEADERS (VERY IMPORTANT)
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: Bearer " . trim($apiKey),
    "Content-Type: application/json",
    "HTTP-Referer: https://medimind.zya.me",
    "X-Title: MediMind App"
]);

// 🔥 Backup authentication (for blocked headers hosting)
curl_setopt($ch, CURLOPT_USERPWD, $apiKey . ":");

curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));

// Execute request
$response = curl_exec($ch);

// ❌ Handle error
if ($response === false) {
    echo "CURL ERROR: " . curl_error($ch);
    exit;
}

// Decode response
$result = json_decode($response, true);

curl_close($ch);

// 🔍 DEBUG: Check full response
if (isset($result['error'])) {
    $aiResponse = "API ERROR: " . $result['error']['message'];
} 
elseif (isset($result['choices'][0]['message']['content'])) {
    $aiResponse = $result['choices'][0]['message']['content'];
} 
else {
    $aiResponse = "Unexpected response:<br><pre>" . print_r($result, true) . "</pre>";
}

?>
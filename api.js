async function sendPostRequest(url, data) {
    try {
    const response = await fetch(url, {
    method: 'POST',
    headers: {
    'Content-Type': 'application/json',
    },
    body: JSON.stringify(data),
    });
    
    const result = await response.json();
    if (response.ok) {
    console.log("Success Data:", result);
    } else {
    console.log("Error Data:", result);
    }
    } catch (error) {
    console.error("Request failed:", error);
    }
    }
    
    // Example usage for /api/speech
    async function sendSpeechRequest() {
    const speechData = { text: "Hello", language: "en" };
    await sendPostRequest('https://speech.pythonanywhere.com/api/speech', speechData);
    }
    
    sendSpeechRequest();
    
    // Example usage for /api/translate
    async function sendTranslateRequest() {
    const translateData = { text: "Hello", language: "en", translate_to: "es" };
    await sendPostRequest('https://speech.pythonanywhere.com/api/translate', translateData);
    }
    
    sendTranslateRequest();
    
    
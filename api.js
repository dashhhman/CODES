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
async function sendSpeechRequest( textVal , languageVal) {
    const speechData = { text: textVal, language: languageVal };
    // await sendPostRequest('https://speech.pythonanywhere.com/api/speech', speechData);

    try {
        const response = await fetch('https://speech.pythonanywhere.com/api/speech', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
                body: JSON.stringify(speechData),
        });
        
        const result = await response.json();
        if (response.ok) {
            // Do action on success here
            console.log("Success Data:", result);

        } else {
            console.log("Error Data:", result);

        }
    } catch (error) {
        console.error("Request failed:", error);
    }
}
    
// sendSpeechRequest();
    
    // Example usage for /api/translate
async function sendTranslateRequest(textVal, languageVal, translateToVal) {
    const translateData = { text: textVal, language: languageVal, translate_to: translateToVal };
    // await sendPostRequest('https://speech.pythonanywhere.com/api/translate', translateData);

    try {
        const response = await fetch('https://speech.pythonanywhere.com/api/translate', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
                body: JSON.stringify(translateData),
        });
        
        const result = await response.json();
        if (response.ok) {
            // Do action on success here
            console.log("Success Data:", result);

        } else {
            console.log("Error Data:", result);

        }
    } catch (error) {
        console.error("Request failed:", error);
    }
}
    
// sendTranslateRequest(); // Call the function to send the request
    
    
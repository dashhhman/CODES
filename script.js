let speech = new  SpeechSynthesisUtterance();

let voice = [];

window.speechSynthesis.onvoiceschanged = () =>{
    voices = window.speechSynthesis.getVoices();
    speech.voice = voices[0];
};

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
            window.speechSynthesis.speak(speech);

        } else {
            console.log("Error Data:", result);

        }
    } catch (error) {
        console.error("Request failed:", error);
    }
}
    
// sendTranslateRequest(); // Call the function to send the request
    



document.querySelector("").addEventListener("click", () =>{
    speech.text = document.querySelector("textarea").value;
    window.speechSynthesis.speak(speech);
});

    
    <script src="<?=asset()?>js/script.js"></script>

    <script>

        // grab the elements to work with
        const textEl = document.getElementById('textarea');
        const speakEl = document.getElementById('speak');
        const output = document.getElementById('textarea');
        const stopBtn = document.getElementById('stop_voice');
        const startBtn = document.getElementById('start_listening');

        // click to listen
        speakEl.addEventListener('click', speakText);
        startBtn.addEventListener('click', startListening);

        let remainingText = '';
        let chunks = [];
        const chunkSize = 200;

        function speakText() {
            // stop any speaking in progress
            window.speechSynthesis.cancel();

            // split text into chunks
            if (remainingText.length > 0) {
                chunks.push(remainingText + textEl.value);
                remainingText = '';
            } else {
                let text = textEl.value;
                while (text.length > chunkSize) {
                    chunks.push(text.slice(0, chunkSize));
                    text = text.slice(chunkSize);
                }
                chunks.push(text);
            }

            // speak first chunk
            const utterance = new SpeechSynthesisUtterance(chunks[0]);
            utterance.lang = 'hi-IN'; // speak like indian
            // utterance.lang = 'en-US'; // speak like american
            // utterance.lang = 'en-GB'; // speak like british
            utterance.rate = '0.8';

            utterance.addEventListener('end', function() {
                // remove first chunk
                chunks.shift();

                if (chunks.length > 0) {
                    speakText();
                }
            });

            window.speechSynthesis.speak(utterance);
        }

        function startListening() {

            if('webkitSpeechRecognition' in window) {
                
                var speechRecognizer = new webkitSpeechRecognition();
                speechRecognizer.continuous = true;
                speechRecognizer.interimResults = true;
                speechRecognizer.lang = 'en-US';
                speechRecognizer.start();

                var finalTranscripts = '';

                speechRecognizer.onresult = function(event) {
                    var interimTranscripts = '';
                    for(var i = event.resultIndex; i < event.results.length; i++){
                        var transcript = event.results[i][0].transcript;
                        transcript.replace("\n", "<br>");
                        if(event.results[i].isFinal) {
                            finalTranscripts += transcript;
                        }else{
                            interimTranscripts += transcript;
                        }
                    }
                    output.innerHTML = finalTranscripts + '' + interimTranscripts + '.';
                };
                speechRecognizer.onerror = function (event) {

                };

                stopBtn.onclick = () => {
                    speechRecognizer.stop();
                    // console.log("Speech recognition stopped.");
                };

            } else {
                output.innerHTML = 'Your browser is not supported. Please download Google chrome or Update your Google chrome!!';
            }

		}

    </script>
</body>
</html>
function typeWriter(elementId, text, speed = 50, callback) {
            let i = 0;
            const element = document.getElementById(elementId);
            
            function typing() {
                if (i < text.length) {
                    element.innerHTML += text.charAt(i);
                    i++;
                    setTimeout(typing, speed);
                } else if (callback) {
                    callback();
                }
            }
            typing();
        }
        document.addEventListener("DOMContentLoaded", function() {
            typeWriter("typing-title", "Добро пожаловать на Fresh News!", 40, function() {
                typeWriter("typing-text", "Ваш источник свежих новостей каждый день.", 30);
            });
        });
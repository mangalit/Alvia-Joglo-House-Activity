<!-- Chatbot Floating Button -->
<div id="chatbot-bubble" style="position: fixed; bottom: 30px; right: 30px; z-index: 9999; cursor: pointer;">
    <div style="background: #AC8F57; width: 60px; height: 60px; border-radius: 50%; display: flex; align-items: center; justify-content: center; box-shadow: 0 4px 15px rgba(0,0,0,0.3); transition: transform 0.3s ease;" onmouseover="this.style.transform='scale(1.1)'" onmouseout="this.style.transform='scale(1)'" onclick="toggleChat()">
        <i class="bi bi-chat-dots-fill" style="color: #fff; font-size: 28px;"></i>
    </div>
</div>

<!-- Chatbot Window -->
<div id="chatbot-window" style="position: fixed; bottom: 100px; right: 30px; width: 350px; height: 500px; background: #111; border: 1px solid #AC8F57; border-radius: 15px; display: none; flex-direction: column; z-index: 9999; box-shadow: 0 10px 30px rgba(0,0,0,0.5); overflow: hidden; font-family: 'Montserrat', sans-serif;">
    <!-- Header -->
    <div style="background: #AC8F57; padding: 15px; display: flex; align-items: center; justify-content: space-between;">
        <div style="display: flex; align-items: center; gap: 10px;">
            <div style="width: 35px; height: 35px; background: #fff; border-radius: 50%; display: flex; align-items: center; justify-content: center;">
                <i class="bi bi-robot" style="color: #AC8F57; font-size: 20px;"></i>
            </div>
            <span style="color: #fff; font-weight: bold; letter-spacing: 1px;">ALVIA ASSISTANT</span>
        </div>
        <i class="bi bi-x-lg" style="color: #fff; cursor: pointer;" onclick="toggleChat()"></i>
    </div>

    <!-- Messages Area -->
    <div id="chat-messages" style="flex: 1; padding: 15px; overflow-y: auto; display: flex; flex-direction: column; gap: 10px;">
        <div style="align-self: flex-start; background: #222; color: #eee; padding: 10px 15px; border-radius: 15px 15px 15px 0; max-width: 80%; font-size: 14px; border: 1px solid #333;">
            Om Swastyastu🙏 Selamat datang di Alvia Joglo House experience. Ada yang bisa saya bantu hari ini?
        </div>
    </div>

    <!-- Input Area -->
    <div style="padding: 15px; border-top: 1px solid #333; display: flex; gap: 10px;">
        <input type="text" id="chat-input" placeholder="Ketik pesan..." style="flex: 1; background: transparent; border: 1px solid #444; border-radius: 20px; padding: 8px 15px; color: #fff; outline: none; font-size: 14px;">
        <button onclick="sendMessage()" style="background: #AC8F57; border: none; color: #fff; width: 35px; height: 35px; border-radius: 50%; cursor: pointer;">
            <i class="bi bi-send-fill"></i>
        </button>
    </div>
</div>

<script>
    function toggleChat() {
        const window = document.getElementById('chatbot-window');
        window.style.display = window.style.display === 'none' ? 'flex' : 'none';
    }

    async function sendMessage() {
        const input = document.getElementById('chat-input');
        const message = input.value.trim();
        if (!message) return;

        // Add user message to UI
        appendMessage('user', message);
        input.value = '';

        // Show typing indicator
        const typingId = appendMessage('bot', '...', true);

        try {
            const response = await fetch('{{ route("chatbot.chat") }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify({ message: message })
            });

            const data = await response.json();

            // Remove typing indicator and add bot reply
            document.getElementById(typingId).remove();

            if (data.reply) {
                appendMessage('bot', data.reply);
            } else {
                const errorMsg = data.error ? 'Error: ' + data.error : 'Maaf, saya sedang mengalami gangguan. Silakan coba lagi nanti.';
                appendMessage('bot', errorMsg);
            }
        } catch (error) {
            console.error('Error:', error);
            document.getElementById(typingId).remove();
            appendMessage('bot', 'Maaf, terjadi kesalahan teknis.');
        }
    }

    function appendMessage(sender, text, isTyping = false) {
        const container = document.getElementById('chat-messages');
        const msgDiv = document.createElement('div');
        const id = 'msg-' + Date.now();
        msgDiv.id = id;

        msgDiv.style.alignSelf = sender === 'user' ? 'flex-end' : 'flex-start';
        msgDiv.style.background = sender === 'user' ? '#AC8F57' : '#222';
        msgDiv.style.color = '#fff';
        msgDiv.style.padding = '10px 15px';
        msgDiv.style.borderRadius = sender === 'user' ? '15px 15px 0 15px' : '15px 15px 15px 0';
        msgDiv.style.maxWidth = '80%';
        msgDiv.style.fontSize = '14px';
        msgDiv.style.border = sender === 'user' ? 'none' : '1px solid #333';

        msgDiv.innerText = text;
        container.appendChild(msgDiv);
        container.scrollTop = container.scrollHeight;

        return id;
    }

    // Allow Enter key to send message
    document.getElementById('chat-input').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            sendMessage();
        }
    });
</script>

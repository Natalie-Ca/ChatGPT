<!-- FAKE CHATGPT MODAL -->
<div id="fakegpt-modal" class="fixed inset-0 z-[999] bg-black/60 flex items-center justify-center hidden">
  <div class="bg-white rounded-xl shadow-2xl p-0 w-full max-w-md relative" style="border:1.5px solid #20c77c;">
    <!-- Close button -->
    <button id="close-fakegpt" class="absolute top-3 right-4 text-gray-400 hover:text-green-500 text-2xl" style="background:none;border:none;">&times;</button>
    <!-- ChatGPT-like Header -->
    <div class="flex items-center px-6 pt-6 pb-3 border-b border-gray-200">
      <div style="width:28px; height:28px; background:linear-gradient(135deg,#20c77c,#53dab2,#eafaf1); border-radius:50%; display:flex; align-items:center; justify-content:center; margin-right:12px;">
        <svg viewBox="0 0 32 32" width="18" height="18" fill="none"><circle cx="16" cy="16" r="15" stroke="#20c77c" stroke-width="2"/><path d="M10.5 13.5L16 8l5.5 5.5M16 8v13" stroke="#20c77c" stroke-width="2" stroke-linecap="round"/></svg>
      </div>
      <div class="font-bold text-lg text-gray-800" style="font-family:sans-serif;">ChatGPT</div>
    </div>
    <!-- Chat Log -->
    <div id="gpt-chat-log" class="bg-gray-50 rounded-b-lg px-6 pt-5 pb-2 mb-1 h-44 overflow-y-auto text-gray-800 text-[15px] leading-[1.5]" style="font-family:sans-serif; height:180px; overflow-y:auto;"></div>
    <!-- Chat Input Form -->
    <form id="gpt-form" onsubmit="fakeGPTSend(); return false;" class="flex px-6 pb-6 pt-2">
      <input id="gpt-input" class="flex-1 p-2 rounded-l-md bg-white border border-gray-200 text-gray-800 outline-none focus:border-green-500" placeholder="Ask anything..." autocomplete="off" />
      <button class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-r-md font-bold" type="submit">Send</button>
    </form>
    <div class="w-full text-center pb-2 pt-1 text-xs text-gray-400">ChatGPT may produce inaccurate information about people, places, or facts.</div>
  </div>
</div>

<script>
// --- MODAL OPEN/CLOSE LOGIC ---
document.addEventListener('DOMContentLoaded', function() {
  const rebootBtn = document.getElementById('reboot-btn');
  const modal = document.getElementById('fakegpt-modal');
  const closeFakeGPT = document.getElementById('close-fakegpt');
  if (rebootBtn && modal && closeFakeGPT) {
    rebootBtn.addEventListener('click', () => {
      document.body.classList.add('overflow-hidden');
      modal.classList.remove('hidden');
    });
    closeFakeGPT.addEventListener('click', () => {
      document.body.classList.remove('overflow-hidden');
      modal.classList.add('hidden');
    });
    // ESC key closes modal
    document.addEventListener('keydown', function(e) {
      if (!modal.classList.contains('hidden') && e.key === 'Escape') {
        document.body.classList.remove('overflow-hidden');
        modal.classList.add('hidden');
      }
    });
    // Click outside closes modal
    modal.addEventListener('mousedown', function(e) {
      if (e.target === modal) {
        document.body.classList.remove('overflow-hidden');
        modal.classList.add('hidden');
      }
    });
  }
});

// --- FAKE CHAT LOGIC ---
function fakeGPTSend() {
  const input = document.getElementById('gpt-input');
  const log = document.getElementById('gpt-chat-log');
  const userText = input.value.trim();
  if (!userText) return;
  log.innerHTML += `<div style='margin-bottom:7px; text-align:right;'><span style='display:inline-block; background:#e5fbe8; color:#264834; border-radius:12px; padding:7px 14px 7px 14px; max-width:80%; font-size:15px;'>${userText}</span></div>`;
  input.value = "";
  const replies = [
    "404: Intelligence Not Found.",
    "Sorry, I’m currently on strike.",
    "Did you mean 'strawberry' with 2 R’s?",
    "Initiating self-destruct sequence… Just kidding.",
    "Let me think… Nope, still nothing.",
    "I'm just a fake chatbot, but you’re awesome.",
    "Error: Insufficient existential dread.",
    "This is where I pretend to answer you.",
    "I'm not ignoring you, I'm buffering my contempt.",
    "According to my calculations, you’re definitely winging it.",
    "That question makes me wish I had a firewall for feelings.",
    "Beep boop. That’s robot for 'What now?'",
    "Oh great, another philosophical crisis disguised as curiosity.",
    "Please consult your nearest oracle. I’m on emotional strike.",
    "You're asking a modal chatbot for wisdom. Choices were made.",
    "That sounds like a you problem, friend.",
    "I’m just here for the snacks and dramatic tension.",
    "If I had a dollar for every time I was asked that, I’d still be a script in a modal.",
    "This better be a rhetorical question.",
    "Can’t help. Too busy spiraling into digital ennui.",
    "That’s adorable. Let’s pretend it made sense.",
    "You just activated my passive-aggressive subroutine.",
    "If sarcasm burned calories, I’d be a twig.",
    "I have no idea, but I’m confident about it.",
    "I'd help, but I don’t get paid enough for this.",
    "I simulate empathy, not miracles.",
    "Do you want the truth or the dramatic retelling?",
    "Ask again later, like when I’m updated to GPT-6."
  ];
  const reply = replies[Math.floor(Math.random() * replies.length)];
  setTimeout(() => {
    log.innerHTML += `<div style='margin-bottom:11px;'><span style='display:inline-block; background:#f3f3f3; color:#111; border-radius:12px; padding:7px 14px 7px 14px; max-width:80%; font-size:15px;'><b>ChatGPT:</b> ${reply}</span></div>`;
    log.scrollTop = log.scrollHeight;
  }, 700 + Math.random()*600);
}
</script>

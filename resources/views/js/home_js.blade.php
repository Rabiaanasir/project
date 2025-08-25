  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js">
  </script>


<script>
document.querySelectorAll('.floating-button').forEach(button => {
    button.addEventListener('click', () => {
        console.log(button.textContent + ' button clicked');
    });
});
/*---------------Counter----------r */
document.addEventListener('DOMContentLoaded', () => {
    const counters = document.querySelectorAll('.counter');

    counters.forEach(counter => {
        const updateCount = () => {
            const target = +counter.getAttribute('data-target');
            const count = +counter.innerText;
            const speed = 200;

            const inc = target / speed;

            if (count < target) {
                counter.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, 1);
            } else  {
                if (counter.classList.contains('customer-counter')) {
                    counter.innerText = target + '+';
                } else {
                    counter.innerText = target;
                }
            }
        };

        updateCount();
    });
});

// Toggle chatbot open/close
document.getElementById("chatbot-toggle").addEventListener("click", function() {
  document.getElementById("chatbot").style.display = "flex";
});

document.getElementById("close-chat").addEventListener("click", function() {
  document.getElementById("chatbot").style.display = "none";
});

function sendMessage() {
  const input = document.getElementById("user-input");
  const message = input.value.trim();
  if (message === "") return;

  addMessage(message, "user");
  input.value = "";

  let response = "I’m not sure I understand. Can you please clarify?";
  const lower = message.toLowerCase();

  if (lower.includes("hello") || lower.includes("hi")) {
    response = "Hi there! ☀️ Are you interested in solar installation for your home or business?";
  } 
  else if (lower.includes("cost") || lower.includes("price")) {
    response = "The cost of solar installation depends on system size and energy needs. On average, it ranges between $5,000 - $15,000 after incentives. ⚡";
  } 
  else if (lower.includes("benefit") || lower.includes("why solar")) {
    response = "Great question! 🌞 Solar reduces electricity bills, increases property value, and helps the environment by using clean energy.";
  } 
  else if (lower.includes("process") || lower.includes("how install")) {
    response = "Our installation process includes: Site survey 📍, Design & permits 📝, Installation 🔧, and Activation ⚡. Usually done within 2-4 weeks.";
  } 
  else if (lower.includes("maintenance")) {
    response = "Solar panels require very little maintenance! ✅ Just occasional cleaning and inspection.";
  } 
  else if (lower.includes("warranty")) {
    response = "Most of our solar panels come with a 25-year performance warranty 🌞 and inverters usually carry 5–10 years warranty.";
  }
  else if (lower.includes("financing") || lower.includes("emi") || lower.includes("loan")) {
    response = "Yes! 💰 We offer flexible EMI and bank financing plans so you can switch to solar without heavy upfront costs.";
  }
  else if (lower.includes("time") || lower.includes("duration") || lower.includes("how long")) {
    response = "On average, residential solar installation takes 2–4 weeks from survey to activation. 🏡⚡";
  }
  else if (lower.includes("space") || lower.includes("roof") || lower.includes("area")) {
    response = "A typical 5kW system requires about 450–500 sq ft of roof space. 📏";
  }
  else if (lower.includes("contact") || lower.includes("call") || lower.includes("quote")) {
    response = "Sure! 📞 Please share your contact details or click our 'Get Quote' button on the website for a free consultation.";
  } 
  else if (lower.includes("bye")) {
    response = "Goodbye! 🌞 Hope to power your future with solar!";
  }

  setTimeout(() => addMessage(response, "bot"), 800);
}

function addMessage(text, sender) {
  const chatBox = document.getElementById("chat-box");
  const msg = document.createElement("div");
  msg.classList.add("message", sender);
  msg.textContent = text;
  chatBox.appendChild(msg);
  chatBox.scrollTop = chatBox.scrollHeight;
}

</script>

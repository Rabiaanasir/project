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
</script>

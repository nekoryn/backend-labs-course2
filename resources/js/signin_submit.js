const form = document.getElementById('signin_form')
const res_msg = document.getElementById('result-message');

form.addEventListener('submit', async function (e) {
    e.preventDefault();

    const formData = new FormData(this);
    const csrfToken = document.querySelector('input[name="_token"]').value;

    try {
        const req = await fetch('/signin', {
            method: 'POST',
            headers: {
                'X-CSRF-TOKEN': csrfToken,
                'Accept': 'application/json'
            },
            body: formData
        });

        const res = await req.json();

        if (req.ok) {
            res_msg.style.color = 'green';
            res_msg.innerText = res.message;
        } else {
            res_msg.style.color = 'red';
            res_msg.innerText = 'Ошибка валидации или сервера';
        }
    } catch(err) {
        console.error('Ошибка: ', err);
    }
})
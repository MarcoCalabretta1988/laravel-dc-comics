const deleteForms = document.querySelectorAll('.delete-forms');
deleteForms.forEach(form => {
    form.addEventListener('submit', (event) => {
        event.preventDefault();
        const title = form.getAttribute('data-title');
        const confirm = window.confirm(`Sei sicuro di voler eliminare il fumetto ${title}?`);
        if (confirm) form.submit();
    });
})

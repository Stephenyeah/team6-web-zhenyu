


const form = document.querySelector('form');
form.addEventListener('submit', (e) => {
  e.preventDefault(); // prevent default form submission

  // get the form data
  const formData = new FormData(form);

  // send the AJAX request to the PHP script
  fetch('add_review.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    console.log(data);
    // display a success message to the user
  })
  .catch(error => {
    console.error(error);
    // display an error message to the user
  });
});


$(document).ready(function () {
    $('#registrationForm').submit(function (e) {
      e.preventDefault(); // Prevent default form submission
  
      // Display success message with a new layout
      $('#result').fadeIn();
      $('#resultContent').html(`
        <div class="success-card">
          <h3 style="color: #d943aa;">Welcome, ${$('#name').val()}!</h3>
          <p style="font-size: 18px; margin: 10px 0;">Your registration was successful. Here's what you submitted:</p>
          <ul class="details-list">
            <li><strong>Date of Birth:</strong> ${$('#dob').val()}</li>
            <li><strong>Email:</strong> ${$('#email').val()}</li>
            <li><strong>Phone Number:</strong> ${$('#phone').val()}</li>
            <li><strong>Gender:</strong> ${$('#gender').val()}</li>
            <li><strong>Address:</strong> ${$('#address').val()}</li>
          </ul>
        </div>
      `);
  
      // Clear the form
      $('#registrationForm')[0].reset();
    });
  });
  
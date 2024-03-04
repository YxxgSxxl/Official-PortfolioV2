////////////////////////// CONTACT FORM SYSTEM //////////////////////////

// INIT
const nodemailer = require('nodemailer');

const name = document.getElementById('name');
const email = document.getElementById('email');
const message = document.getElementById('message');

// Create a transporter
const transporter = nodemailer.createTransport({
  service: 'gmail',
  auth: {
    user: 'contact.eckesalex14@gmail.com',
    pass: 'ohux ayqu hqrr pixz',
  },
});

// Define the mail options
const mailOptions = {
  from: email.value,
  to: 'recipient_email',
  subject: 'Contact Form Submission',
  text: 'Hello, this is a test email from the contact form.',
};

// Send the email
transporter.sendMail(mailOptions, (error, info) => {
  if (error) {
    console.log('Error:', error);
  } else {
    console.log('Email sent:', info.response);
  }
});

// Custom JavaScript for enhanced interactivity
document.addEventListener("DOMContentLoaded", function() {
    // Example: Add smooth scrolling to all links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelector(this.getAttribute('href')).scrollIntoView({
                behavior: 'smooth'
            });
        });
    });
});


    // Function to fetch and display a motivational quote in the hero section
    async function fetchQuote() {
        try {
            const response = await fetch('https://api.quotable.io/random');
            const data = await response.json();
            document.querySelector('.hero-description').innerHTML += `<p class="quote">"${data.content}" - ${data.author}</p>`;
        } catch (error) {
            console.error('Error fetching quote:', error);
        }
    }

    // Call the function to fetch and display the quote
    fetchQuote();

    // Function to dynamically update card content (placeholder example)
    function updateCardContent() {
        // You can fetch and update card content from an API or other dynamic source
        console.log('Updating card content dynamically...');
        // Example: document.querySelector('.card-title').innerText = 'New Title';
    }

    // Call the function to update card content if needed
    updateCardContent();
    
    

   // Function to dynamically add a new event to the timeline
   function addTimelineEvent(date, event, side) {
    // Create new timeline event elements
    const timelineEvent = document.createElement('div');
    timelineEvent.className = 'timeline-event ' + side;

    const timelineContent = document.createElement('div');
    timelineContent.className = 'timeline-content';

    const eventDate = document.createElement('h5');
    eventDate.innerText = date;

    const eventDescription = document.createElement('p');
    eventDescription.innerText = event;

    // Append new elements to the timeline
    timelineContent.appendChild(eventDate);
    timelineContent.appendChild(eventDescription);
    timelineEvent.appendChild(timelineContent);
    document.querySelector('.timeline').appendChild(timelineEvent);
}

// Example usage of adding a new timeline event dynamically
addTimelineEvent('June 1, 2008', 'Started a new job at XYZ Company', 'left');    

document.getElementById('contactForm').addEventListener('submit', function(event) {
    var isValid = true;
    
    // Validate Name
    var name = document.getElementById('name').value;
    if (name.trim() === '') {
        isValid = false;
        alert('Name is required.');
    }

    // Validate Email
    var email = document.getElementById('email').value;
    if (email.trim() === '') {
        isValid = false;
        alert('Email is required.');
    } else if (!validateEmail(email)) {
        isValid = false;
        alert('Invalid email format.');
    }

    // Validate Subject
    var subject = document.getElementById('subject').value;
    if (subject.trim() === '') {
        isValid = false;
        alert('Subject is required.');
    }

    // Validate Message
    var message = document.getElementById('message').value;
    if (message.trim() === '') {
        isValid = false;
        alert('Message is required.');
    }

    // Validate Captcha
    var captcha = document.getElementById('captcha').value;
    if (captcha.trim() === '') {
        isValid = false;
        alert('Captcha is required.');
    }

    if (!isValid) {
        event.preventDefault();
    }
});

function validateEmail(email) {
    var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
}
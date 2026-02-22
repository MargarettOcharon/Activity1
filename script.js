// Info box data
const infoData = {
    course: {
        title: "Course Information",
        content: "Bachelor of Science in Information Technology (BSIT) is a four-year program that focuses on software development, web development, database management, networking, and system administration. This program prepares students for careers in IT industry."
    },
    school: {
        title: "School Information",
        content: "University of Science and Technology of Southern Philippines (USTP) is a state university in Cagayan de Oro City. It offers various engineering, science, and technology programs with excellent facilities and qualified faculty members."
    },
    section: {
        title: "Section Information",
        content: "IT3R11 is my current class section for the Bachelor of Science in Information Technology program."
    },
    age: {
        title: "Age Information",
        content: "I am currently 21 years old, born in 2004. At this age, I am focused on completing my degree and building my skills in technology and programming to prepare for my future career."
    },
    contact: {
        title: "Contact Information",
        content: "You can reach me at 09565218332. Feel free to call or text for any inquiries, collaboration opportunities, or professional connections. I'm always open to networking with fellow students and professionals."
    },
    email: {
        title: "Email Information",
        content: "My email address is ocharon.lynnmargarett@gmail.com. This is my primary contact for professional communications, project collaborations, and academic-related matters. I check my email regularly."
    },
    facebook: {
        title: "Facebook Information",
        content: "You can find me on Facebook as Marga Metillo Ocharon. I use Facebook to stay connected with friends, classmates, and for networking. Feel free to send a friend request or message!"
    },
    hobbies: {
        title: "Hobbies Information",
        content: "I love spending time in nature and watching K-Dramas. Nature helps me relax and find inspiration, while K-Dramas provide entertainment and a glimpse into Korean culture. These hobbies help me maintain a healthy work-life balance."
    }
};

// Education data
const educationData = {
    nursery: {
        title: "Nursery Education",
        content: "I began my educational journey in Bayacabac, Maribojoc, Bohol, where I was born."
    },
    preschool: {
        title: "Preschool Education",
        content: "I continued my preschool education in Bonbon, Cagayan de Oro City due to personal reasons. We moved to CDO because my mother originally lived there."
    },
    grade1to5: {
        title: "Elementary School (Grade 1-5)",
        content: "Then grew up in Bonbon and completed Grades 1 through 5 at Bonbon Elementary."
    },
    grade6: {
        title: "Elementary School (Grade 6)",
        content: "After my mother passed away, we returned to Bohol. I completed my final year of elementary school at Bayacabac."
    },
    highschool: {
        title: "High School Education",
        content: "As I became more independent, I attended Dr. Cecilio Putong National High School for my junior high school years. It is a city school in Bohol."
    },
    seniorhigh: {
        title: "Senior High School Education",
        content: "I continued my senior high school education at Dr. Cecilio Putong National High School because I wanted to complete all six years in the same school, unlike my elementary experience."
    },
    college: {
        title: "College Education",
        content: "I am currently in my 3rd year at the USTP, pursuing a Bachelor of Science in Information Technology. I'm learning advanced programming, database management, web development, and system analysis."
    }
};

// Add click event to all info boxes
document.querySelectorAll('.info-box').forEach((box, index) => {
    box.style.cursor = 'pointer';
    
    box.addEventListener('click', function() {
        const keys = ['course', 'school', 'section', 'age', 'contact', 'email', 'facebook', 'hobbies'];
        const key = keys[index];
        const data = infoData[key];
        
        showModal(data.title, data.content);
    });
});

// Add click event to all education items
document.querySelectorAll('.education-item').forEach((item, index) => {
    item.style.cursor = 'pointer';
    
    item.addEventListener('click', function() {
        const keys = ['nursery', 'preschool', 'grade1to5', 'grade6', 'highschool', 'seniorhigh', 'college'];
        const key = keys[index];
        const data = educationData[key];
        
        showModal(data.title, data.content);
    });
});

// Function to show modal
function showModal(title, content) {
    // Remove existing modal if any
    const existingModal = document.querySelector('.info-modal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Create modal HTML
    const modal = document.createElement('div');
    modal.className = 'info-modal';
    modal.innerHTML = `
        <div class="modal-content">
            <span class="close-modal">&times;</span>
            <h2>${title}</h2>
            <p>${content}</p>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Close modal on click
    modal.addEventListener('click', function(e) {
        if (e.target.classList.contains('info-modal') || e.target.classList.contains('close-modal')) {
            modal.remove();
        }
    });
}

// About Me Photos - Clickable
const aboutPhotos = [
    {
        title: "Lake Campsite Mabini",
        description: "This place reminds me of a special experience in my life. It shows what I enjoy and the memories I value."
    },
    {
        title: "Alicia Panoramic",
        description: "This captures a wonderful experience from one of my adventures. It reflects my love for exploring and the joy I feel in discovering new places."
    },
    {
        title: "Communal Ranch",
        description: "This moment is very meaningful to me. It represents an experience that became part of my story."
    },
    {
        title: "Lovers Lane",
        description: "This moment represents the experiences I cherish and the growth I’m thankful for."
    }
];

// Add click events to about photos
document.querySelectorAll('.about-photos img').forEach((img, index) => {
    img.style.cursor = 'pointer';
    img.style.transition = 'transform 0.3s';
    
    img.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.05)';
    });
    
    img.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
    
    img.addEventListener('click', function() {
        const data = aboutPhotos[index];
        showImageModal(this.src, data.title, data.description);
    });
});

// Interest Photos - Clickable
const interestPhotos = [
    {
        title: "Technology Passion",
        description: "Technology is my passion. I love learning about programming, software development, and exploring new tech innovations. This is where I see my future career growing."
    },
    {
        title: "Love for Nature",
        description: "Nature brings me peace and inspiration. I enjoy spending time outdoors, appreciating the beauty of the natural world. It helps me relax and recharge."
    },
    {
        title: "K-Drama Enthusiast",
        description: "K-Dramas are my comfort zone. I love the stories, the culture, and the emotions they bring. Watching K-Dramas helps me unwind and learn about Korean culture."
    }
];

// Add click events to interest photos
document.querySelectorAll('.interest-card img').forEach((img, index) => {
    img.style.cursor = 'pointer';
    img.style.transition = 'transform 0.3s';
    
    img.addEventListener('mouseenter', function() {
        this.style.transform = 'scale(1.05)';
    });
    
    img.addEventListener('mouseleave', function() {
        this.style.transform = 'scale(1)';
    });
    
    img.addEventListener('click', function() {
        const data = interestPhotos[index];
        showImageModal(this.src, data.title, data.description);
    });
});

// Function to show image modal
function showImageModal(imageSrc, title, description) {
    // Remove existing modal if any
    const existingModal = document.querySelector('.info-modal');
    if (existingModal) {
        existingModal.remove();
    }
    
    // Create modal HTML
    const modal = document.createElement('div');
    modal.className = 'info-modal';
    modal.innerHTML = `
        <div class="modal-content image-modal">
            <span class="close-modal">&times;</span>
            <img src="${imageSrc}" alt="${title}" style="width: 100%; max-height: 400px; object-fit: contain; border-radius: 10px; margin-bottom: 1.5rem;">
            <h2>${title}</h2>
            <p>${description}</p>
        </div>
    `;
    
    document.body.appendChild(modal);
    
    // Close modal on click
    modal.addEventListener('click', function(e) {
        if (e.target.classList.contains('info-modal') || e.target.classList.contains('close-modal')) {
            modal.remove();
        }
    });
}
// Initialize wedding data from data.js
let weddingData = {};

// Add this to your existing dashboard.js file

// Logout functionality
// Add this to your existing dashboard.js file or in a script tag at the end of your HTML
document.addEventListener('DOMContentLoaded', function() {
    document.getElementById('signOutButton').addEventListener('click', function(e) {
        e.preventDefault();
        console.log('Logging out...');
        localStorage.clear();
        window.location.href = 'login.html'; // Change to your login page
    });
});

// document.addEventListener('DOMContentLoaded', function() {
//     // Get all dropdown items and find the one with "Sign out" text
//     const allDropdownItems = document.querySelectorAll('.dropdown-menu .dropdown-item');
    
//     allDropdownItems.forEach(item => {
//         if (item.textContent.trim() === 'Sign out') {
//             item.addEventListener('click', function(e) {
//                 e.preventDefault();
                
//                 // Perform logout actions
//                 console.log('Logging out...');
                
//                 // Clear any stored user data (if using localStorage)
//                 localStorage.clear();
                
//                 // Redirect to login page
//                 window.location.href = 'login.html'; // Change this to your login page URL
//             });
//         }
//     });
// });

document.addEventListener('DOMContentLoaded', function() {
    // Check if user is logged in
    if (sessionStorage.getItem('loggedIn') !== 'true') {
        window.location.href = 'login.html';
        return;
    }
})

// Add this to your dashboard.js file
document.addEventListener('DOMContentLoaded', function() {
  // Get all sidebar navigation links
  const navLinks = document.querySelectorAll('#menu a[data-section]');
  
  // Add click event listeners to each link
  navLinks.forEach(link => {
      link.addEventListener('click', function(e) {
          e.preventDefault();
          
          // Get the section to show from data attribute
          const sectionToShow = this.getAttribute('data-section');
          
          // Hide all content sections
          document.querySelectorAll('.content-section').forEach(section => {
              section.style.display = 'none';
          });
          
          // Show the selected section
          document.getElementById(`${sectionToShow}-section`).style.display = 'block';
          
          // Update the section title
          updateSectionTitle(sectionToShow);
          
          // Update URL hash
          window.location.hash = `${sectionToShow}-section`;
      });
  });
  
  // Function to update section title
  function updateSectionTitle(section) {
      const titleElement = document.querySelector('.section-title');
      switch(section) {
          case 'bride':
              titleElement.textContent = 'Bride & Groom Information';
              break;
          case 'time':
              titleElement.textContent = 'Event Time Information';
              break;
          case 'link':
              titleElement.textContent = 'Important Links';
              break;
          case 'gallery':
              titleElement.textContent = 'Gallery';
              break;
          case 'bank':
              titleElement.textContent = 'Bank Accounts';
              break;
          case 'audio':
              titleElement.textContent = 'Audio Settings';
              break;
          case 'api':
              titleElement.textContent = 'API Configuration';
              break;
          default:
              titleElement.textContent = 'Dashboard';
      }
  }
  
  // Handle page load with hash
  if (window.location.hash) {
      const hash = window.location.hash.substring(1); // Remove the # character
      const section = hash.replace('-section', '');
      
      // Find the corresponding link and click it
      const link = document.querySelector(`#menu a[data-section="${section}"]`);
      if (link) {
          link.click();
      }
  } else {
      // Default to show first section
      document.querySelector('#bride-section').style.display = 'block';
  }
});

// Load the wedding data when the page loads
document.addEventListener('DOMContentLoaded', async function() {
    try {
        // In a real application, you would dynamically import the data
        // For now, we'll use the data structure from the example
        weddingData = {
            bride: {
                L: {
                    id: 1,
                    name: 'Lorem Ipsum',
                    child: 'Putra ke lorem',
                    father: 'Lorem',
                    mother: 'Ipsum',
                    image: './src/assets/images/cowo.png'
                },
                P: {
                    id: 2,
                    name: 'Ipsum Lorem',
                    child: 'Putri ke ipsum',
                    father: 'Dolor',
                    mother: 'Sit Amet',
                    image: './src/assets/images/cewe.png'
                }
            },
            event: {
                akad: {
                    date: '2025-04-20',
                    time: '08:00 - 10:00',
                    location: 'Gedung Pernikahan Bahagia',
                    address: 'Jl. Cinta Abadi No. 123, Jakarta Selatan'
                },
                resepsi: {
                    date: '2025-04-20',
                    time: '11:00 - 14:00',
                    location: 'Gedung Pernikahan Bahagia',
                    address: 'Jl. Cinta Abadi No. 123, Jakarta Selatan'
                }
            },
            gallery: [
                {
                    id: 1,
                    image: './src/assets/images/gallery1.jpg',
                    caption: 'Prewedding photo at the beach'
                },
                {
                    id: 2,
                    image: './src/assets/images/gallery2.jpg',
                    caption: 'Engagement ceremony'
                },
                {
                    id: 3,
                    image: './src/assets/images/gallery3.jpg',
                    caption: 'Photo session in the garden'
                }
            ],
            wishes: [],
            gifts: {
                bankAccounts: [
                    {
                        id: 1,
                        bank: 'BCA',
                        number: '1234567890',
                        name: 'Lorem Ipsum'
                    },
                    {
                        id: 2,
                        bank: 'Mandiri',
                        number: '0987654321',
                        name: 'Ipsum Lorem'
                    }
                ],
                digitalWallet: [
                    {
                        id: 1,
                        type: 'DANA',
                        number: '081234567890',
                        name: 'Lorem Ipsum'
                    },
                    {
                        id: 2,
                        type: 'GoPay',
                        number: '089876543210',
                        name: 'Ipsum Lorem'
                    }
                ]
            },
            rsvp: {
                status: false,
                guests: []
            },
            settings: {
                music: './src/assets/audio/wedding-song.mp3',
                primaryColor: '#D4AF37',
                secondaryColor: '#F5F5F5',
                fontFamily: 'Cormorant Garamond, serif',
                opened: false
            }
        };

        // Initialize the application with the loaded data
        initializeApp(weddingData);
    } catch (error) {
        console.error('Failed to load wedding data:', error);
    }
});

// Function to initialize the application with the wedding data
function initializeApp(data) {
    // Update DOM elements with wedding information
    updateBrideInfo(data.bride);
    updateEventInfo(data.event);
    displayGallery(data.gallery);
    setupRSVPForm(data.rsvp);
    setupGiftInfo(data.gifts);
    
    // Apply settings
    applySettings(data.settings);
    
    // Load wishes if any exist
    if (data.wishes.length > 0) {
        displayWishes(data.wishes);
    }
    
    // Show the main content after everything is loaded
    document.getElementById('loading-screen').style.display = 'none';
    document.getElementById('main-content').style.display = 'block';
}

// Helper functions for different sections
function updateBrideInfo(brideData) {
    // Update bride L information
    document.getElementById('bride-l-name').textContent = brideData.L.name;
    document.getElementById('bride-l-child').textContent = brideData.L.child;
    document.getElementById('bride-l-parents').textContent = `${brideData.L.father} & ${brideData.L.mother}`;
    document.getElementById('bride-l-image').src = brideData.L.image;
    
    // Update bride P information
    document.getElementById('bride-p-name').textContent = brideData.P.name;
    document.getElementById('bride-p-child').textContent = brideData.P.child;
    document.getElementById('bride-p-parents').textContent = `${brideData.P.father} & ${brideData.P.mother}`;
    document.getElementById('bride-p-image').src = brideData.P.image;
}

function updateEventInfo(eventData) {
    // Update akad information
    document.getElementById('akad-date').textContent = formatDate(eventData.akad.date);
    document.getElementById('akad-time').textContent = eventData.akad.time;
    document.getElementById('akad-location').textContent = eventData.akad.location;
    document.getElementById('akad-address').textContent = eventData.akad.address;
    
    // Update resepsi information
    document.getElementById('resepsi-date').textContent = formatDate(eventData.resepsi.date);
    document.getElementById('resepsi-time').textContent = eventData.resepsi.time;
    document.getElementById('resepsi-location').textContent = eventData.resepsi.location;
    document.getElementById('resepsi-address').textContent = eventData.resepsi.address;
    
    // Set countdown timer
    startCountdown(eventData.akad.date);
}

function displayGallery(galleryData) {
    const galleryContainer = document.getElementById('gallery-container');
    galleryContainer.innerHTML = '';
    
    galleryData.forEach(item => {
        const galleryItem = document.createElement('div');
        galleryItem.className = 'gallery-item';
        
        galleryItem.innerHTML = `
            <img src="${item.image}" alt="${item.caption}" class="gallery-image">
            <div class="gallery-caption">${item.caption}</div>
        `;
        
        galleryContainer.appendChild(galleryItem);
    });
}

function setupRSVPForm(rsvpData) {
    const rsvpForm = document.getElementById('rsvp-form');
    const guestList = document.getElementById('guest-list');
    
    // Display existing guests if any
    if (rsvpData.guests.length > 0) {
        displayGuests(rsvpData.guests);
    }
    
    // Set up form submission
    rsvpForm.addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Get form data
        const name = document.getElementById('guest-name').value;
        const attendance = document.getElementById('attendance').value;
        const message = document.getElementById('rsvp-message').value;
        
        // Add to the guests array
        rsvpData.guests.push({
            id: rsvpData.guests.length + 1,
            name: name,
            attendance: attendance === 'yes',
            message: message,
            timestamp: new Date().toISOString()
        });
        
        // Update the display
        displayGuests(rsvpData.guests);
        
        // Reset the form
        rsvpForm.reset();
    });
}

function displayGuests(guests) {
    const guestList = document.getElementById('guest-list');
    guestList.innerHTML = '';
    
    guests.forEach(guest => {
        const guestItem = document.createElement('div');
        guestItem.className = 'guest-item';
        
        guestItem.innerHTML = `
            <div class="guest-name">${guest.name}</div>
            <div class="guest-attendance">${guest.attendance ? 'Will Attend' : 'Cannot Attend'}</div>
            <div class="guest-message">${guest.message}</div>
        `;
        
        guestList.appendChild(guestItem);
    });
}

function setupGiftInfo(giftData) {
    const bankContainer = document.getElementById('bank-accounts');
    const walletContainer = document.getElementById('digital-wallets');
    
    // Display bank accounts
    bankContainer.innerHTML = '';
    giftData.bankAccounts.forEach(account => {
        const accountItem = document.createElement('div');
        accountItem.className = 'account-item';
        
        accountItem.innerHTML = `
            <div class="bank-name">${account.bank}</div>
            <div class="account-number">${account.number}</div>
            <div class="account-holder">${account.name}</div>
            <button class="copy-btn" data-copy="${account.number}">Copy</button>
        `;
        
        bankContainer.appendChild(accountItem);
    });
    
    // Display digital wallets
    walletContainer.innerHTML = '';
    giftData.digitalWallet.forEach(wallet => {
        const walletItem = document.createElement('div');
        walletItem.className = 'wallet-item';
        
        walletItem.innerHTML = `
            <div class="wallet-type">${wallet.type}</div>
            <div class="wallet-number">${wallet.number}</div>
            <div class="wallet-holder">${wallet.name}</div>
            <button class="copy-btn" data-copy="${wallet.number}">Copy</button>
        `;
        
        walletContainer.appendChild(walletItem);
    });
    
    // Set up copy buttons
    setupCopyButtons();
}

function displayWishes(wishes) {
    const wishesContainer = document.getElementById('wishes-container');
    wishesContainer.innerHTML = '';
    
    wishes.forEach(wish => {
        const wishItem = document.createElement('div');
        wishItem.className = 'wish-item';
        
        wishItem.innerHTML = `
            <div class="wish-name">${wish.name}</div>
            <div class="wish-message">${wish.message}</div>
            <div class="wish-date">${formatDate(wish.timestamp)}</div>
        `;
        
        wishesContainer.appendChild(wishItem);
    });
}

function applySettings(settings) {
    // Apply music
    const bgMusic = document.getElementById('bg-music');
    bgMusic.src = settings.music;
    
    // Apply colors
    document.documentElement.style.setProperty('--primary-color', settings.primaryColor);
    document.documentElement.style.setProperty('--secondary-color', settings.secondaryColor);
    
    // Apply font
    document.documentElement.style.setProperty('--main-font', settings.fontFamily);
    
    // Handle opening animation if needed
    if (!settings.opened) {
        showOpeningAnimation();
    }
}

// Utility functions
function formatDate(dateString) {
    const date = new Date(dateString);
    const options = { weekday: 'long', year: 'numeric', month: 'long', day: 'numeric' };
    return date.toLocaleDateString('id-ID', options);
}

function startCountdown(targetDateString) {
    const targetDate = new Date(targetDateString);
    
    const countdownInterval = setInterval(function() {
        const now = new Date();
        const difference = targetDate - now;
        
        if (difference <= 0) {
            clearInterval(countdownInterval);
            document.getElementById('countdown').innerHTML = 'Today is the day!';
            return;
        }
        
        const days = Math.floor(difference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((difference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((difference % (1000 * 60)) / 1000);
        
        document.getElementById('countdown-days').textContent = days;
        document.getElementById('countdown-hours').textContent = hours;
        document.getElementById('countdown-minutes').textContent = minutes;
        document.getElementById('countdown-seconds').textContent = seconds;
    }, 1000);
}

function setupCopyButtons() {
    const copyButtons = document.querySelectorAll('.copy-btn');
    
    copyButtons.forEach(button => {
        button.addEventListener('click', function() {
            const textToCopy = this.getAttribute('data-copy');
            
            navigator.clipboard.writeText(textToCopy).then(() => {
                // Change button text temporarily
                const originalText = this.textContent;
                this.textContent = 'Copied!';
                
                setTimeout(() => {
                    this.textContent = originalText;
                }, 2000);
            });
        });
    });
}

function showOpeningAnimation() {
    const envelope = document.getElementById('envelope');
    const mainContent = document.getElementById('main-content');
    
    envelope.style.display = 'flex';
    mainContent.style.display = 'none';
    
    // Set up opening button
    document.getElementById('open-invitation').addEventListener('click', function() {
        envelope.classList.add('open');
        
        setTimeout(() => {
            envelope.style.display = 'none';
            mainContent.style.display = 'block';
            
            // Start background music if available
            const bgMusic = document.getElementById('bg-music');
            if (bgMusic) {
                bgMusic.play().catch(error => {
                    console.log('Autoplay prevented. Please enable music manually.');
                });
            }
            
            // Update settings to prevent opening animation next time
            weddingData.settings.opened = true;
        }, 1000);
    });
}
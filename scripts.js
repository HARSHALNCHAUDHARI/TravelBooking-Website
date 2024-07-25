// Sample data for demonstration
const packagesData = [
    {
      destination: "Malé, Maldives",
      days: 7,
      price: "$2500",
      hotel: {
        name: "Luxury Beach Resort",
        amenities: ["Overwater Bungalows", "Private Island Dining", "Diving and Snorkeling"]
      }
    },
    {
      destination: "Bangkok, Thailand",
      days: 5,
      price: "$1800",
      hotel: {
        name: "City Center Hotel",
        amenities: ["City View Rooms", "Rooftop Pool", "Thai Massage Spa"]
      }
    },
    {
      destination: "Kuala Lumpur, Malaysia",
      days: 6,
      price: "MYR 3500",
      hotel: {
        name: "Urban Retreat Hotel",
        amenities: ["Sky Bar", "Infinity Pool", "Fitness Center"]
      }
    },
    {
      destination: "Kathmandu, Nepal",
      days: 8,
      price: "NPR 45000",
      hotel: {
        name: "Mountain View Lodge",
        amenities: ["Panoramic Terrace", "Traditional Nepali Cuisine", "Guided Trekking Tours"]
      }
    },
    {
      destination: "Jakarta, Indonesia",
      days: 4,
      price: "IDR 12000000",
      hotel: {
        name: "Tropical Paradise Resort",
        amenities: ["Beachfront Villas", "Spa & Wellness Center", "Water Sports Activities"]
      }
    }
  ];
  
  // Function to display packages
  function displayPackages(packages) {
    const packagesContainer = document.getElementById('packages');
    packagesContainer.innerHTML = '';
  
    packages.forEach(package => {
      const packageCard = document.createElement('div');
      packageCard.classList.add('package');
  
      packageCard.innerHTML = `
        <h2>${package.destination}</h2>
        <p>Duration: ${package.days} days</p>
        <p>Price: ${package.price}</p>
        <h3>Hotel Details</h3>
        <p>Hotel Name: ${package.hotel.name}</p>
        <p>Amenities: ${package.hotel.amenities.join(', ')}</p>
        <button class="book-now-btn">Book Now</button>
      `;
  
     // Add click event listener to each package card
     packageCard.addEventListener('click', () => {
      // Redirect to booking page
      window.location.href = 'booking.php?destination=' + encodeURIComponent(package.destination);
    });

  
      packagesContainer.appendChild(packageCard);
    });
  }
  
  // Function to filter packages based on search input
  function filterPackages(searchTerm) {
    const filteredPackages = packagesData.filter(package =>
      package.destination.toLowerCase().includes(searchTerm.toLowerCase())
    );
    displayPackages(filteredPackages);
  }
  
  // Call the function to display all packages initially
  displayPackages(packagesData);
  
  // Add event listener to search input
  document.getElementById('searchInput').addEventListener('input', function(event) {
    filterPackages(event.target.value);
  });
  
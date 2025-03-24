const productCategories = [
    "Electronics", "Smart Home", "Kitchen", "Fashion", "Beauty", "Sports", "Books", 
    "Toys", "Home", "Garden", "Automotive", "Health", "Pet Supplies", "Office",
    "Baby", "Tools", "Outdoor", "Art", "Music", "Food"
];

function generateProducts(count = 2000) {
    const products = [];
    const brands = ["Amazon", "Samsung", "Apple", "Sony", "LG", "Philips", "Lenovo", "HP", "Dell", "Asus"];
    
    for (let i = 1; i <= count; i++) {
        const category = productCategories[Math.floor(Math.random() * productCategories.length)];
        const brand = brands[Math.floor(Math.random() * brands.length)];
        const rating = (Math.floor(Math.random() * 20) + 30) / 10; // 3.0 to 5.0
        const reviews = Math.floor(Math.random() * 50000) + 1000;
        const basePrice = Math.floor(Math.random() * 990) + 10; // $10 to $999
        
        products.push({
            id: i,
            name: `${brand} ${category} Pro ${Math.floor(Math.random() * 100)}`,
            price: basePrice + 0.99,
            image: `https://picsum.photos/400?random=${i}`,
            category: category.toLowerCase(),
            rating: rating,
            reviews: reviews,
            description: `High-quality ${category.toLowerCase()} product from ${brand}`,
            brand: brand,
            features: [
                "Premium quality",
                "Latest technology",
                "User-friendly design",
                "1-year warranty"
            ],
            specs: {
                color: ["Black", "Silver", "White"][Math.floor(Math.random() * 3)],
                inStock: Math.random() > 0.2,
                shipping: "Free Prime Shipping"
            }
        });
    }
    return products;
}

const productDatabase = generateProducts(2000);

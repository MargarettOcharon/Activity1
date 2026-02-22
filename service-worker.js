const CACHE_NAME = 'lynn-portfolio-v1';
const urlsToCache = [
  '/Activity1/index.php',
  '/Activity1/style.css',
  '/Activity1/script.js',
  '/Activity1/profile.jpg',
  '/Activity1/background.jpg',
  // Add all your image files here
];

self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => cache.addAll(urlsToCache))
  );
});

self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => response || fetch(event.request))
  );
});
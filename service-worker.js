const CACHE_NAME = 'lynn-portfolio-v1';
const urlsToCache = [
  '/Activity1/',
  '/Activity1/index.html',
  '/Activity1/style.css',
  '/Activity1/script.js',
  '/Activity1/manifest.json',
  '/Activity1/profile.jpg',
  '/Activity1/background.jpg',
  '/Activity1/course.jpg',
  '/Activity1/ustp.jpg',
  '/Activity1/section.jpg',
  '/Activity1/age.jpg',
  '/Activity1/contact.jpg',
  '/Activity1/email.jpg',
  '/Activity1/facebook.jpg',
  '/Activity1/hobbies.jpg',
  '/Activity1/bayacabac.jpg',
  '/Activity1/bonbon.jpg',
  '/Activity1/dcpnhs.jpg',
  '/Activity1/about1.jpg',
  '/Activity1/about2.jpg',
  '/Activity1/about3.jpg',
  '/Activity1/about4.jpg',
  '/Activity1/technology.jpg',
  '/Activity1/nature.jpg',
  '/Activity1/kdrama.jpg'
];

// Install - cache files
self.addEventListener('install', event => {
  event.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Opened cache');
        return cache.addAll(urlsToCache);
      })
  );
});

// Fetch - serve from cache
self.addEventListener('fetch', event => {
  event.respondWith(
    caches.match(event.request)
      .then(response => {
        if (response) {
          return response;
        }
        return fetch(event.request);
      }
    )
  );
});

// Activate - clean old caches
self.addEventListener('activate', event => {
  event.waitUntil(
    caches.keys().then(cacheNames => {
      return Promise.all(
        cacheNames.map(cacheName => {
          if (cacheName !== CACHE_NAME) {
            return caches.delete(cacheName);
          }
        })
      );
    })
  );
});
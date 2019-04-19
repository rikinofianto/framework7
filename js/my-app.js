var app = new Framework7({
  // App root element
  root: '#app',
  // App Name
  name: 'Rumah Sakit',
  // App id
  id: 'com.myapp.test',
  // Enable swipe panel
  panel: {
    swipe: 'left',
  },
  // Add default routes
  routes: [
    {
      path: '/about/',
      url: 'pages/about.html',
    },

    {
      path: '/tambah-data-kamar/',
      componentUrl: 'pages/tambah-data-kamar.html'
    },

    {
      path: '/tampilkan-data-kamar/',
      componentUrl: 'pages/tampilkan-data-kamar.html'
    }
  ],
  // ... other parameters
});

var mainView = app.views.create('.view-main');
module.exports = {
  files: 'pages/**/*.php',
  proxy: 'localhost:80', // replace with your own PHP server configuration
  port: 3000,
  open: false,
  notify: false,
  middleware: [
    require('browser-sync-php')({
      proxyUrl: 'http://localhost:80', // replace with your own PHP server configuration
      logLevel: 'silent',
    })
  ]
}


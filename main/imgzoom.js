var currentZoom = 1;
var isDragging = false;
var initialX, initialY;
var offsetX = 0, offsetY = 0;

function openOverlay(imageSrc) {
  var overlay = document.getElementById('overlay');
  var overlayImage = document.getElementById('overlayImage');
  var zoomInButton = document.getElementById('zoomInButton');
  var zoomOutButton = document.getElementById('zoomOutButton');
  var closeButton = document.getElementById('closeButton');
  var moveLeftButton = document.getElementById('moveLeftButton');
  var moveRightButton = document.getElementById('moveRightButton');

  // Make the gallery invisible when the overlay is opened
  document.body.classList.add('overlay-visible');

  // Change body background color
  document.body.style.backgroundColor = 'rgba(0, 0, 0, 0.8)';

  overlayImage.src = imageSrc;
  overlay.style.display = 'flex';
  overlay.style.cursor = 'move';
  resetZoom();
  
  // Show zoom buttons and close button when overlay is clicked
  zoomInButton.style.display = 'block';
  zoomOutButton.style.display = 'block';
  closeButton.style.display = 'block';
  // Show move left and move right buttons when overlay is clicked
  moveLeftButton.style.display = 'block';
  moveRightButton.style.display = 'block';
}

function closeOverlay() {
  var overlay = document.getElementById('overlay');
  var zoomInButton = document.getElementById('zoomInButton');
  var zoomOutButton = document.getElementById('zoomOutButton');
  var closeButton = document.getElementById('closeButton');
  var moveLeftButton = document.getElementById('moveLeftButton');
  var moveRightButton = document.getElementById('moveRightButton');

  // Make the gallery visible when the overlay is closed
  document.body.classList.remove('overlay-visible');

  // Reset body background color
  document.body.style.backgroundColor = '';

  overlay.style.display = 'none';
  
  // Hide zoom buttons and close button when overlay is closed
  zoomInButton.style.display = 'none';
  zoomOutButton.style.display = 'none';
  closeButton.style.display = 'none';
  // Hide move left and move right buttons when overlay is closed
  moveLeftButton.style.display = 'none';
  moveRightButton.style.display = 'none';
}

function toggleZoom() {
  if (currentZoom === 1) {
    zoomIn();
  } else {
    zoomOut();
  }
}

function zoomIn() {
  var overlayImage = document.getElementById('overlayImage');
  currentZoom += 0.2;
  overlayImage.style.transform = 'scale(' + currentZoom + ')';
}

function zoomOut() {
  var overlayImage = document.getElementById('overlayImage');
  currentZoom -= 0.2;
  overlayImage.style.transform = 'scale(' + currentZoom + ')';
}

function resetZoom() {
  var overlayImage = document.getElementById('overlayImage');
  currentZoom = 1;
  overlayImage.style.transform = 'scale(1)';
}



function moveOverlay(direction) {
  var overlay = document.getElementById('overlay');
  var moveStep = 50; // Adjust the step size as needed

  if (direction === 'left') {
    offsetX -= moveStep;
  }  if (direction === 'right') {
    offsetX += moveStep;
  }  if (direction === 'down') {
    offsetY += moveStep;
  } if (direction === 'up') {
    offsetY -= moveStep;
  }

  overlay.style.transform = 'translate(' + offsetX + 'px, ' + offsetY + 'px)';
}

// Zooming using the mouse wheel
document.getElementById('overlay').addEventListener('wheel', function (event) {
  event.preventDefault();
  if (event.deltaY < 0) {
    zoomIn();
  } else {
    zoomOut();
  }
});
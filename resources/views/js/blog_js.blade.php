<script>
    // Get all video elements with the class 'video-player'
    const videos = document.querySelectorAll('.video-player');
    
    // Add an event listener to each video to handle the 'play' event
    videos.forEach(video => {
        video.addEventListener('play', function() {
            // Pause all other videos when one starts playing
            videos.forEach(v => {
                if (v !== video) {  // Check if the current video is not the one that started playing
                    v.pause();      // Pause any other video that is playing
                }
            });
        });
    });
    </script>
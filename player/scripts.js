let currentVideoIndex = 0; // Start at the first video
const totalVideos = 14; // This value should be dynamic if possible (as discussed previously)

function updateVideo(index) {
    const player = document.getElementById("youtube-player");
    player.src = `https://www.youtube.com/embed?listType=playlist&list=PLTN1yTtVGx8sA0R4lVJecHYE70lojy7Cg&index=${index}&autoplay=1&enablejsapi=1`;
}

function prevVideo() {
    if (currentVideoIndex > 0) {
        currentVideoIndex--;
        updateVideo(currentVideoIndex);
    }
}

function nextVideo() {
    if (currentVideoIndex < totalVideos - 1) { // Make sure not to exceed the playlist bounds
        currentVideoIndex++;
        updateVideo(currentVideoIndex);
    }
}

function randomVideo() {
    currentVideoIndex = Math.floor(Math.random() * totalVideos);
    updateVideo(currentVideoIndex);
}

function goToVideo() {
    const indexInput = document.getElementById("videoIndex").value;
    const index = parseInt(indexInput) - 1; // Convert input to zero-based index

    if (index >= 0 && index < totalVideos) {
        currentVideoIndex = index;
        updateVideo(currentVideoIndex);
    } else {
        alert(`Index out of range! There are only ${totalVideos} videos!`);
    }
}
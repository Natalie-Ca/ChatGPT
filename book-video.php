<!-- book-video.php -->
<div class="w-full md:w-64 flex-shrink-0 md:ml-6 mt-6 md:mt-0">
  <!-- Local video example -->
  <video 
    controls 
    poster="/Pictures/Cover1.png"
    class="rounded-lg shadow-lg w-full max-w-xs"
    style="background:#222;"
  >
    <source src="/Videos/book-trailer.mp4" type="video/mp4">
    Your browser does not support the video tag.
  </video>
  
  <!-- OR: Use a YouTube embed instead (uncomment below) -->
  <!--
  <div class="aspect-video rounded-lg shadow-lg w-full max-w-xs overflow-hidden" style="background:#222;">
    <iframe 
      width="100%" height="200" 
      src="https://www.youtube.com/embed/YOUR_VIDEO_ID" 
      title="Book Trailer" frameborder="0"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
    </iframe>
  </div>
  -->
</div>

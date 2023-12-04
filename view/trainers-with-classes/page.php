<h1>Trainers with Classes</h1>
<div class="card-group">
 <?php
while ($trainer=$trainers -> fetch_assoc()) {
?>
  <div class="card">
    <div class="card-body">
      <h5 class="card-title"><?php echo $trainer['trainer_name'];?></h5>
      <p class="card-text">
      <ul class="list-group">        
  <?php
        $classes = selectClassesByTrainer($trainer['trainer_id']);
        while ($class = $classes ->fetch_assoc()) {
      ?>
    <li class="list-group-item"><?php echo $class['class_description'];?> - <?php echo $class['day'];?> - <?php echo $class['class_number'];?></li>       
      <?php
        }
   ?>
      </ul>
      </p>
      <p class="card-text"><small class="text-body-secondary">Preferred Restaurant: <?php echo $trainer['studio_number'];?></small></p>
    </div>
  </div>
  <?php

}
?>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>
<body>
<br></br>
<div class="row row-cols-1 row-cols-md-2 g-4">
  <div class="col">
    <div class="card">
      <img src="Matt Damon3.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Matt Damon</h5>
        <p class="card-text"> 🏹 Archery, literature, and the art of connection! 📚 As an English professor, I find joy in the power of words and the precision of a well-aimed arrow. When not lost in the pages of a good book, you'll likely find me on the archery range, blending the beauty of two worlds. Seeking someone who appreciates the charm of literature, the thrill of hitting the bullseye, and the magic that happens when shared passions align. If you're ready for a chapter of adventure and a love story with a poetic twist, swipe right! 🎯📖 #ArcheryAndWordsmith #CupidsBowChronicles@MattDamon on instagram.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="man.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Nick Young</h5>
        <p class="card-text">🌿 Outdoor enthusiast with a passion for painting, a heart for dogs, and a quest for a lifelong adventure partner! 🎨🐾 Whether I'm chasing sunsets on a hiking trail, channeling my creativity onto a canvas, or sharing moments of joy with my furry companion, life's all about the simple pleasures. On the lookout for a kindred spirit who values nature, appreciates the strokes of a paintbrush, and understands the unconditional love a dog brings. Let's explore the canvas of life together – if you're ready for a palette of love and laughter, swipe right! 🌄🖌️ #NatureLover #DogEnthusiast #CupidsBowAdventures.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="leo.jpg" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Leonardo DiCaprio</h5>
        <p class="card-text">🎣 Passionate about reeling in big catches and casting a line into life's adventures! 🎉 As the life of the party, I bring the energy wherever I go, making every moment memorable. Whether it's a spontaneous road trip, a night of laughter, or a quiet day by the water, I believe in living life to the fullest. Looking for a partner who shares a love for spontaneity, good vibes, and the thrill of the catch. If you're ready to dive into a sea of fun and build a connection that's as exciting as a tight line, let's make waves together! 🚗🌊 #PartyAnimal #AdventureSeeker #CupidsBowFishing.</p>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card">
      <img src="mgb.webp" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title">Michael B Jordan</h5>
        <p class="card-text">🏋️‍♂️ Fitness enthusiast, bookworm, and finance analyst by day! 📈 Embracing the balance of an active lifestyle and the tranquility of a good read. Whether I'm breaking a sweat at the gym or diving into the pages of a compelling story, life's about constant growth and exploration. I'm all about trying new things and finding joy in every experience. Seeking a partner who values both the thrill of staying active and the quiet moments with a good book. If you're ready to embark on a journey of fitness, literature, and financial adventures, swipe right! 📚💪 #ActiveLifestyle #BookishExplorer #CupidsBowFinance.</p>
      </div>
    </div>
  </div>
</div>
</body>
</html>

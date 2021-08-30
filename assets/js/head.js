
document.addEventListener("visibilitychange", function() {
    console.log( document.visibilityState );
    if (document.visibilityState === 'visible') {
        document.title = " Hello there !  \ud83d\ude3b ";
      } else {
        document.title = " Leaving? \ud83d\ude2d ";
      }
  });
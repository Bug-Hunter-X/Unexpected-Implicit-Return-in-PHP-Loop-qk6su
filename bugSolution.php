function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
      // Explicitly break the loop instead of implicitly returning
      break;
    }
    echo $i . " ";
  }
  echo "Loop finished";
}

myFunc();
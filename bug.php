function myFunc() {
  for ($i = 0; $i < 10; $i++) {
    if ($i == 5) {
      return;
    }
    echo $i . " ";
  }
  echo "Loop finished";
}

myFunc();
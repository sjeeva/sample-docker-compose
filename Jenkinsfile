node ('docker') {
  stage 'SCM Checkout'
  sh 'ls -l'
  
  stage 'Docker image build'
  sh 'docker build -t axnapp axnapp/'
  
  stage 'Docker image push'
  sh 'docker images'
}

node ('docker') {
  stage 'Launch docker container'
  echo "placeholder for launch docker container"
}

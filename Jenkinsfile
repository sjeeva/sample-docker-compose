node ('docker') {
  stage 'SCM Checkout'
  checkout scm
  sh 'ls -l'
  
  stage 'Docker image build'
  sh 'docker build -t axnapp axnapp/'
  
  stage 'Docker image push'
  sh 'docker images'
}

node ('docker') {
  stage 'Launch docker container'
  docker-compose up -d
  docker-compose ps
}

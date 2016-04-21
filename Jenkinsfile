node ('docker') {
  stage 'SCM Checkout'
  checkout scm
  
  stage 'Docker image build'
  sh 'docker build -t axnapp axnapp/'
  
  stage 'Docker image push'
  sh 'docker images'
}

node ('docker') {
  stage 'Launch docker container'
  sh 'docker-compose up -d'
  sh 'docker-compose ps'
}

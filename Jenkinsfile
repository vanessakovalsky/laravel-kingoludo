pipeline {
 agent any
  stages {
    stage('clone'){
      steps {
        git url: 'https://github.com/vanessakovalsky/laravel-kingoludo.git'
      }
    }
    stage('Build'){
      tools {
        gradle 'gradle'
      }
      steps {
        sh 'gradle vendor'
        sh 'gradle test'
        sh 'gradle packageDistribution'
      }
    }
      stage('Analyse qualité'){
      tools {
        gradle 'gradle'
      }
      steps {
        sh 'gradle phploc'
      }
  }
}

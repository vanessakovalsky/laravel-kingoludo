pipeline {
 agent any
  stages {
    stage('clone'){
      steps {
        git url: 'https://github.com/vanessakovalsky/laravel-kingoludo.git'
      }
    }
    stage('integration continue'){
      tools {
        gradle 'gradle'
      }
      steps {
        sh 'gradle vendor'
        sh 'gradle test'
        sh 'gradle packageDistribution'
      }
    }
  }
}

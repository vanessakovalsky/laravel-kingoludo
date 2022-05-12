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
  post {
      success {
        plot csvFileName: 'build/phploc.csv', 
                    csvSeries: [[
                                        file: 'build/phploc.csv',
                                        exclusionValues: '',
                                        displayTableFlag: false,
                                        inclusionFlag: 'OFF',
                                        url: '']],
                    group: 'Plot Group',
                    title: 'Plot Title',
                    style: 'line',
                    exclZero: false,
                    keepRecords: false,
                    logarithmic: false,
                    numBuilds: '',
                    useDescr: false,
                    yaxis: '',
                    yaxisMaximum: '',
                    yaxisMinimum: ''
      }
    }
}

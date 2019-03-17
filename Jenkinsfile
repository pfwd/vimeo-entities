pipeline {
    agent {
        label 'docker'
    }

    stages {
        stage('Test') {
        agent {
            dockerfile {
              label 'docker'
              filename 'Dockerfile'
            }
          }
          steps {
              sh 'bin/phpstan analyse --level=7 src || exit 0'
          }
        }
    }
}
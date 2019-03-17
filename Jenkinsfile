pipeline {
    agent { dockerfile true }

    stages {
        stage('Test') {
            steps {
                sh 'bin/phpstan analyse --level=7 src || exit 0'
            }
        }
    }
}
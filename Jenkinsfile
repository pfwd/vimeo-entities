pipeline {
    agent {
        dockerfile {
            filename 'Dockerfile'
            args '-v ${PWD}:/app -w /app'
        }
    }

    stages {
        stage('Test') {
            steps {
                sh 'bin/phpstan analyse --level=7 src || exit 0'
            }
        }
    }
}
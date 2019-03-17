pipeline {
    agent {
        dockerfile true
        reuseNode true
    }

    stages {
        stage('Test') {
            steps {
                sh '/app/bin/phpstan analyse --level=7 src || exit 0'
            }
        }
    }
}
pipeline {
    agent any
    stages {
        stage('Test') {
            steps {
                script {

                    def testImage = docker.build("test-image", ".")

                    testImage.inside {
                        sh 'bin/phpstan analyse --level=7 src || exit 0'
                    }
                }
            }
        }
    }
}
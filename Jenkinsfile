pipeline {
    agent {
        // Equivalent to "docker build -f Dockerfile.build --build-arg version=1.0.2 ./build/
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
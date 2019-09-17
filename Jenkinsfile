pipeline {
    agent none
    stages {
        stage('Run Tests') {
            parallel {
                stage('Tests On PHP7.0') {
                    agent {
                        label "php70"
                    }
                    steps {
                        sh "ant full-build"
                    }
                    post {
                        always {
                            junit "**/TEST-*.xml"
                        }
                    }
                }
                stage('Test On PHP7.2') {
                    agent {
                        label "php72"
                    }
                    steps {
                        sh "ant full-build"
                    }
                    post {
                        always {
                            sh 'rsync -av --include="*.xml" --exclude="*build/logs*" build/* build/logs/'
                        }
                    }
                }
            }
        }
    }
}

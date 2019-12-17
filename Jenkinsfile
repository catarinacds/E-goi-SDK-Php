import groovy.json.JsonSlurper

timeout(time: 15, unit: 'MINUTES') {
    node {
       stage('Git SCM') {
           checkout scm
       }
       stage('Build') {
           sh "openapi-generator generate -i https://dev-api.egoiapp.com/openapi -g php -o . -c configPhp.json"

           sh "rm -rf target/"
       }
       stage('Deploy') {
           def data = new JsonSlurper().parseText(readFile(file:'./configPhp.json'))
           
           sh "ls"
           sh "git status"
           sh "git add ."
           sh "git commit -am \"Version:  ${data.artifactVersion}\""
           sh 'git push'
           sh "git tag ${data.artifactVersion}"
           sh 'git push --tags'
       }
       stage('SonarQube analysis') {
           withSonarQubeEnv('E-Goi SonarQube') {
             sh "/usr/bin/sonar-scanner"
           }
       }
   }
}

import groovy.json.JsonSlurperClassic
import groovy.json.JsonOutput
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
           def json = readFile(file:'./configPhp.json')
           def data = new JsonSlurper().parseText(json)
           def version = ${data.artifactVersion}
           
           sh 'git add .'
           sh "git commit -am \"Version:  ${version}\""
           sh 'git push'
           sh "git tag ${version}"
           sh 'git push --tags'
       }
       stage('SonarQube analysis') {
           withSonarQubeEnv('E-Goi SonarQube') {
             sh "/usr/bin/sonar-scanner"
           }
       }
   }
}

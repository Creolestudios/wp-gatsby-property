const path = require(`path`)
const chunk = require(`lodash/chunk`)

// This is a simple debugging tool
// dd() will prettily dump to the terminal and kill the process
// const { dd } = require(`dumper.js`)

async function getPropertyPosts({ graphql, reporter }) {
  const graphqlResult = await graphql(/* GraphQL */ `
    query PropertyPosts {
      allWpProperty {
        edges {
          node {
            id
            slug
          }
        }
      }
    }
  `)

  if (graphqlResult.errors) {
    reporter.panicOnBuild(
      `There was an error loading property posts`,
      graphqlResult.errors
    )
    return
  }

  return graphqlResult.data.allWpProperty.edges
}

async function getNewPropertyPosts({ graphql, reporter }) {
  const graphqlResult = await graphql(/* GraphQL */ `
    query NewPropertyPosts {
      allWpNewproperty {
        edges {
          node {
            id
            slug
          }
        }
      }
    }
  `)

  if (graphqlResult.errors) {
    reporter.panicOnBuild(
      `There was an error loading newproperty posts`,
      graphqlResult.errors
    )
    return
  }

  return graphqlResult.data.allWpNewproperty.edges
}

exports.createPages = async ({ graphql, actions, reporter }) => {
  const { createPage } = actions

  // Get property posts
  const propertyPosts = await getPropertyPosts({ graphql, reporter })

  // Get newproperty posts
  const newPropertyPosts = await getNewPropertyPosts({ graphql, reporter })

  // Create individual property pages
  propertyPosts.forEach(({ node }) => {
    createPage({
      path: `/property/${node.slug}`,
      component: path.resolve(`./src/templates/property-details.js`),
      context: {
        id: node.id,
      },
    })
  })

  // Create individual newproperty pages
  newPropertyPosts.forEach(({ node }) => {
    createPage({
      path: `/newproperty/${node.slug}`,
      component: path.resolve(`./src/templates/newproperty-details.js`),
      context: {
        id: node.id,
      },
    })
  })
}
